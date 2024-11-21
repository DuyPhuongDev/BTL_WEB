<?php
    require_once('controllers/admin/base_controller.php');
    require_once('models/User.php');
    require_once('models/Role.php');
    
    class UserController extends BaseController
    {
        function __construct()
        {
            $this->folder = 'user';
        }
        public function index()
        {
            $roles = Role::getAllRoles();
            $users = User::getAllUser();
            $data = array('roles' => $roles, 'users' => $users);
            $this->render('index', $data);
        }
        public function add()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
            }
        }
        public function edit()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $userId = intval($_POST['userId']);
                $status = $_POST['status'];
                $result = User::updateStatus($userId, $status);
                if($result){
                    $data = array('roles' => Role::getAllRoles(), 'users' => User::getAllUser());
                    $users = [];
                    foreach ($data['users'] as $user) {
                        $users[] = [
                            'userId' => $user->getUserId(),
                            'username' => $user->getUsername(),
                            'password' => $user->getPassword(),
                            'email' => $user->getEmail(),
                            'fullName' => $user->getFullName(),
                            'avatarUrl' => $user->getAvatarUrl(),
                            'phone' => $user->getPhone(),
                            'address' => $user->getAddress(),
                            'status' => $user->getStatus(),
                            'roleId' => $user->getRoleId(),
                            'createdAt' => $user->getCreatedAt(),
                            'updatedAt' => $user->getUpdatedAt()
                        ];
                    }
                    $roles = [];
                    foreach ($data['roles'] as $role) {
                        $roles[] = [
                            'roleId' => $role->getRoleId(),
                            'roleName' => $role->getRoleName()
                        ];
                    }
                    echo json_encode(array('status' => 200, 'message' => 'update status success', 'data' => ['users' => $users, 'roles' => $roles]));
                }else{
                    echo json_encode(array('status' => 500, 'message' => 'update status failed'));
                }
            }else{
                echo json_encode(array('status' => 400, 'message' => 'bad request'));
            }

        }
        public function delete()
        {
            $this->render('delete');
        }
    }
?>