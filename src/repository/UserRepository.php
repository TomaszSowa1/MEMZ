<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository{
    public function getUser(string $email):?User{
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users
            left join "UserRoles" UR on users."UserId" = UR."UserId"
            left join "Roles" R on R."RoleId" = UR."RoleId" 
            where email=:email
        ');
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();

        $user=$stmt->fetch(PDO::FETCH_ASSOC);
        if($user==false){
            return null;
        }
        return new User(
            $user['email'],$user['password'],$user['name'],$user['surname'],$user['phone'],$user['enabled'],$user['salt'],$user['created_dt'],$user['role_description']
        );
    }

    public function addUser(User $user)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, name,surname,phone,enabled,salt,created_dt)
            VALUES (?, ?, ?,?,?,?,?,?)
        ');

        $stmt->execute([
            $user->getEmail() ,
            $user->getPassword() ,
            $user->getName() ,
            $user->getSurname() ,
            $user->getPhone() ,
            $user->getEnabled() ,
            $user->getSalt() ,
            $user->getCreatedDt() ,
        ]);
    }

    public function updateUser(User $user){
        
        $data=[
            'email'=>$user->getEmail(),
            'password'=>$user->getPassword(),
            'name'=>$user->getName(),
            'surname'=>$user->getSurname(),
            'phone'=>$user->getPhone(),
        ];
        $stmt = $this->database->connect()->prepare('
            UPDATE users set password=:password,name=:name,surname=:surname,phone=:phone
            where email=:email;
        ')->execute($data);
    }


    public function getUserRole(int $UserId):?string{
        $stmt = $this->database->connect()->prepare('SELECT role_description FROM public.Roles r join UserRoles u on r.RoleId=u.RoleId  where u.UserId=:UserId');
        $stmt->bindParam(':UserId',$UserId,PDO::PARAM_STR);
        $stmt->execute();

        $userRole=$stmt->fetch(PDO::FETCH_ASSOC);
        if($userRole==null && $userRole==""){
            return null;
        }
        return $userRole;
    }

}