<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criaчуo: 20/12/2008
*
*  Versao: 1.0
*
*  Щ proibido sob pena de Lei a utilizaчуo ou reproduчуo de parte ou de todo conteudo desse codigo sem a previa autorizaчуo da Intelligy Networks
*/	
class Session {

		public static $ip;
		public static $tid;
		public static $host;
		public static $sid;
		public static $browser;
		public static $ssid;

		public static function start() {
			session_start();
			self::acquireInformation();
		}
		
		public static function stop() {
			session_unset();
			session_destroy();
		}
		
		public static function getSID() {
			self::acquireInformation();
			return self::$sid;
		}
		
		public function getSSID() {
			self::acquireInformation();
			return (self::$ssid);
		}
		
		public static function getIP() {
			return (self::$ip);
		}
		
		
		public static function setMaxTimeToLive() {
			session.gc_maxlifetime(SESSION_MAXTIME); // Directive presente in config
		}
		
		private static function acquireInformation() {
			self::$ip = $_SERVER['REMOTE_ADDR'];
			self::$host = '';
			self::$sid = session_id();
			self::acquireTID();
			self::$browser = $_SERVER['HTTP_USER_AGENT'];
			self::$ssid = self::$tid.'_'.self::$sid;
		}
	
		private static function acquireTID() {
			if (isset($_SESSION['sessionInformationTID'])) {
				self::$tid = $_SESSION['sessionInformationTID'];
			} else {
				self::$tid = time();
				$_SESSION['sessionInformationTID'] = self::$tid;
			}
		}
		
}
?>