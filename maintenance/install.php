<?php
/**
 * CLI-based MediaWiki installation and configuration.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Maintenance
 */

if ( !function_exists( 'version_compare' ) || ( version_compare( phpversion(), '5.3.2' ) < 0 ) ) {
	require_once( dirname( __FILE__ ) . '/../includes/PHPVersionError.php' );
	wfPHPVersionError( 'cli' );
}

define( 'MW_CONFIG_CALLBACK', 'Installer::overrideConfig' );
define( 'MEDIAWIKI_INSTALL', true );

require_once( dirname( __DIR__ ) . "/maintenance/Maintenance.php" );

/**
 * Maintenance script to install and configure MediaWiki
 *
 * @ingroup Maintenance
 */
class CommandLineInstaller extends Maintenance {
	function __construct() {
		parent::__construct();
		global $IP;

		$this->addArg( 'name', 'The name of the wiki', true );

		$this->addArg( 'admin', 'The username of the wiki administrator (WikiSysop)', true );
		$this->addOption( 'pass', 'The password for the wiki administrator.', false, true );
		$this->addOption( 'passfile', 'An alternative way to provide pass option, as the contents of this file', false, true );
		/* $this->addOption( 'email', 'The email for the wiki administrator', false, true ); */
		$this->addOption( 'scriptpath', 'The relative path of the wiki in the web server (/wiki)', false, true );

		$this->addOption( 'lang', 'The language to use (en)', false, true );
		/* $this->addOption( 'cont-lang', 'The content language (en)', false, true ); */

		$this->addOption( 'dbtype', 'The type of database (mysql)', false, true );
		$this->addOption( 'dbserver', 'The database host (localhost)', false, true );
		$this->addOption( 'dbport', 'The database port; only for PostgreSQL (5432)', false, true );
		$this->addOption( 'dbname', 'The database name (my_wiki)', false, true );
		$this->addOption( 'dbpath', 'The path for the SQLite DB (/var/data)', false, true );
		$this->addOption( 'dbprefix', 'Optional database table name prefix', false, true );
		$this->addOption( 'installdbuser', 'The user to use for installing (root)', false, true );
		$this->addOption( 'installdbpass', 'The pasword for the DB user to install as.', false, true );
		$this->addOption( 'dbuser', 'The user to use for normal operations (wikiuser)', false, true );
		$this->addOption( 'dbpass', 'The pasword for the DB user for normal operations', false, true );
		$this->addOption( 'dbpassfile', 'An alternative way to provide dbpass option, as the contents of this file', false, true );
		$this->addOption( 'confpath', "Path to write LocalSettings.php to, default $IP", false, true );
		/* $this->addOption( 'dbschema', 'The schema for the MediaWiki DB in pg (mediawiki)', false, true ); */
		/* $this->addOption( 'namespace', 'The project namespace (same as the name)', false, true ); */
		$this->addOption( 'env-checks', "Run environment checks only, don't change anything" );
	}

	function execute() {
		global $IP, $wgTitle;
		$siteName = isset( $this->mArgs[0] ) ? $this->mArgs[0] : "Don't care"; // Will not be set if used with --env-checks
		$adminName = isset( $this->mArgs[1] ) ? $this->mArgs[1] : null;
		$wgTitle = Title::newFromText( 'Installer script' );

		$dbpassfile = $this->getOption( 'dbpassfile', false );
		if ( $dbpassfile !== false ) {
			if ( $this->getOption( 'dbpass', false ) !== false ) {
				$this->error( 'WARNING: You provide the options "dbpass" and "dbpassfile". The content of "dbpassfile" overwrites "dbpass".' );
			}
			wfSuppressWarnings();
			$dbpass = file_get_contents( $dbpassfile );
			wfRestoreWarnings();
			if ( $dbpass === false ) {
				$this->error( "Couldn't open $dbpassfile", true );
			}
			$this->mOptions['dbpass'] = trim( $dbpass, "\r\n" );
		}

		$passfile = $this->getOption( 'passfile', false );
		if ( $passfile !== false ) {
			if ( $this->getOption( 'pass', false ) !== false ) {
				$this->error( 'WARNING: You provide the options "pass" and "passfile". The content of "passfile" overwrites "pass".' );
			}
			wfSuppressWarnings();
			$pass = file_get_contents( $passfile );
			wfRestoreWarnings();
			if ( $pass === false ) {
				$this->error( "Couldn't open $passfile", true );
			}
			$this->mOptions['pass'] = str_replace( array( "\n", "\r" ), "", $pass );
		} elseif ( $this->getOption( 'pass', false ) === false ) {
			$this->error( 'You need to provide the option "pass" or "passfile"', true );
		}

		$installer =
			InstallerOverrides::getCliInstaller( $siteName, $adminName, $this->mOptions );

		$status = $installer->doEnvironmentChecks();
		if ( $status->isGood() ) {
			$installer->showMessage( 'config-env-good' );
		} else {
			$installer->showStatusMessage( $status );
			return;
		}
		if ( !$this->hasOption( 'env-checks' ) ) {
			$installer->execute();
			$installer->writeConfigurationFile( $this->getOption( 'confpath', $IP ) );
		}
	}

	function validateParamsAndArgs() {
		if ( !$this->hasOption( 'env-checks' ) ) {
			parent::validateParamsAndArgs();
		}
	}
}

$maintClass = "CommandLineInstaller";

require_once RUN_MAINTENANCE_IF_MAIN;
