<?php
session_start();
$config = new control();
	class control{
		function __construct(){
			if (isset($_GET['mod'])) {
				$conn = $this::open();
				$action = mysqli_escape_string($conn, $_GET['mod']);

				switch ($action) {

					case 'login':
						$this->login($conn);
						break;

					case 'logout':
						$this->logout();
						break;

					case 'delete':
						$this->delete($conn);
						break;
					
					case 'addrecord':
						$this->addRecord($conn);
					break;

				}
			}
		}

		public function getAdminDetails($conn){
			$id = $_SESSION['user_id'];
			$sql = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
			if (mysqli_num_rows($sql)>0) {
				if ($row = mysqli_fetch_array($sql)) {
					return $row;
				}
			} else {
				return 0;
			}
		}

		public function addRecord($conn){
			$data = $this->getAdminDetails($conn);

			$busno = $_POST['busno'];
			$name = $data['name'];
			$idno = $data['id'];
			$vaulttype = $_POST['vaulttype'];
			$busmodel = $_POST['busmodel'];
			$schedule = $_POST['schedule'];
			$maintenanceorder = $_POST['maintenanceorder'];
			$timestart = $_POST['timestart'];
			$timecompleted = $_POST['timecompleted'];
			$remarkfront1 = $_POST['remarkfront1'];
			$remarkfront2 = $_POST['remarkfront2'];
			$remarkside1 = $_POST['remarkside1'];
			$remarkside2 = $_POST['remarkside2'];
			$remarkrear1 = $_POST['remarkrear1'];
			$remarkrear2 = $_POST['remarkrear2'];
			$remarkcontroller1 = $_POST['remarkcontroller1'];
			$remarkcontroller2 = $_POST['remarkcontroller2'];
			$remarkradio1 = $_POST['remarkradio1'];
			$remarkradio2 = $_POST['remarkradio2'];
			$remarkradio3 = $_POST['remarkradio3'];
			$remarktracker1 = $_POST['remarktracker1'];
			$remarktracker2 = $_POST['remarktracker2'];
			$remarktracker3 = $_POST['remarktracker3'];
			$remarktracker4 = $_POST['remarktracker4'];
			$remarkplayer1 = $_POST['remarkplayer1'];
			$remarkplayer2 = $_POST['remarkplayer2'];
			$remarkplayer3 = $_POST['remarkplayer3'];
			$remarkplayer4 = $_POST['remarkplayer4'];
			$remarkplayer5 = $_POST['remarkplayer5'];
			$remarksys1 = $_POST['remarksys1'];
			$remarksys2 = $_POST['remarksys2'];
			$remarksys3 = $_POST['remarksys3'];
			$remarksys4 = $_POST['remarksys4'];
			$remarkcctv1 = $_POST['remarkcctv1'];
			$remarkcctv2 = $_POST['remarkcctv2'];
			$remarkcctv3 = $_POST['remarkcctv3'];
			$remarkcctv4 = $_POST['remarkcctv4'];
			$remarkcctv5 = $_POST['remarkcctv5'];
			$remarketm1 = $_POST['remarketm1'];
			$remarketm2 = $_POST['remarketm2'];
			$remarkreader1 = $_POST['remarkreader1'];
			$remarkreader2 = $_POST['remarkreader2'];
			$remarkbts1 = $_POST['remarkbts1'];
			$remarkbts2 = $_POST['remarkbts2'];
			$remarkvault1 = $_POST['remarkvault1'];
			$remarkvault2 = $_POST['remarkvault2'];

			$sqlinsert = mysqli_query($conn, "INSERT INTO record (busno, name, idno, busmodel, maintenanceorder,schedule, timestart,timecompleted,remarkfront1,remarkfront2,remarkside1,remarkside2,remarkrear1,remarkrear2,remarkcontroller1,remarkcontroller2,remarkradio1,remarkradio2,remarkradio3,remarktracker1,remarktracker2,remarktracker3,remarktracker4,remarkplayer1,remarkplayer2,remarkplayer3,remarkplayer4,remarkplayer5,remarksys1,remarksys2,remarksys3,remarksys4,remarkcctv1,remarkcctv2,remarkcctv3,remarkcctv4,remarkcctv5,remarketm1,remarketm2,remarkreader1,remarkreader2,remarkbts1,remarkbts2,remarkvault1,remarkvault2,vaulttype) 
				VALUES ('$busno','$name','$idno','$busmodel','$maintenanceorder', '$schedule','$timestart','$timecompleted','$remarkfront1',
				'$remarkfront2','$remarkside1','$remarkside2','$remarkrear1','$remarkrear2','$remarkcontroller1',
				'$remarkcontroller2','$remarkradio1','$remarkradio2','$remarkradio3','$remarktracker1','$remarktracker2','$remarktracker3',
				'$remarktracker4','$remarkplayer1','$remarkplayer2','$remarkplayer3','$remarkplayer4','$remarkplayer5',
				'$remarksys1','$remarksys2','$remarksys3','$remarksys4','$remarkcctv1','$remarkcctv2','$remarkcctv3',
				'$remarkcctv4','$remarkcctv5','$remarketm1','$remarketm2','$remarkreader1','$remarkreader2','$remarkbts1',
				'$remarkbts2','$remarkvault1','$remarkvault2','$vaulttype')");
				
				if ($sqlinsert) {

					echo "<script>window.alert('Successful.')</script>";
					echo "<script>window.location='../admin/history.php'</script>";
				} else {
					print_r(mysqli_error($conn));
					echo "<script>window.alert('Unsuccessful.')</script>";
					//echo "<script>window.location='../admin/history.php'</script>";
				}

		}

		public function delete($conn){
			$id = -1;
			if (isset($_GET['id'])) {
				$id = mysqli_escape_string($conn, $_GET['id']);
			}
			$sql = mysqli_query($conn, "DELETE FROM record WHERE id = '$id'");
			if ($sql) {
				echo "<script>window.location='../admin/history.php'</script>";
			}
		}

		public function allRecord($conn){
			$sql = mysqli_query($conn, "SELECT * FROM record ");
			if (mysqli_num_rows($sql)>0) {
				while ($row = mysqli_fetch_array($sql)) {
					$rows[] = $row;
				}
			} else {
				$rows = false;
			}
			return $rows;
		}

		public function recordDetails($conn,$id){
			$rsrecord=mysqli_query($conn,"SELECT * FROM record WHERE id='$id'");
			if (mysqli_num_rows($rsrecord)>0) {
				if ($row = mysqli_fetch_array($rsrecord)) {
					return $row;
				}
			} else {
				return 0;
			}
		}

		public function logout(){
			
			session_destroy();
			echo "<script>window.location='../'</script>";
		}

		//start authcontrol
		public function login($conn){
			$username = mysqli_escape_string($conn, $_POST['username']);
			$pass =  mysqli_escape_string($conn, $_POST['password']);
			$encrypted = md5($pass);

			$rslogin = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$encrypted'") or die (mysqli_error($conn));
			if (mysqli_num_rows($rslogin) > 0) {
				$rsrow = mysqli_fetch_array($rslogin);
				//echo $rsrow['user_id'];
				$_SESSION['user_id'] = $rsrow['id'];
				
				echo "<script>window.location = '../admin/'</script>";
			} else {
				echo "<script>window.alert('BATAL: email atau kata laluan anda salah. Sila cuba lagi')</script>";
					echo "<script>window.location = '../'</script>";
			}
        }
        
        public function open(){			
			// define(localhost, localhost);
			// define(db_nama, ebundle);
			// define(db_username, root);
            // define(db_password, '');
            $localhost="localhost";
            $dbname="assignment";
            $username="root";
            $password="";

			

			$conn = mysqli_connect($localhost,$username,$password,$dbname);

			if (!$conn) {
				echo "Connection Failed: " . mysqli_connect_error();
			} else {
				return $conn;
			}
		}
	}
?>