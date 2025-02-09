<?php

include_once ('Model.php');
class Utilisateur extends Model
{

    private int $id = 0;
    private string $name;
    private string $lastName;
    private string $email;
    private string $password;
    private string $phone;
    private string $photo;
    private Role $role;
    private int $roleId = 1;
    private $tablename = "utilisateurs";

    public function __construct()
    {
        parent::__construct();
        $this->role = new Role();
    }
//    public function create($tablename,$params)
//    {
//        parent::create($this->tablename, $params);
//    }


    public function __call($name, $arguments)
    {
        if ($name = "instance") {
            if (count($arguments) == 8) {
                $this->name = $arguments[0];
                $this->lastName = $arguments[1];
                $this->email = $arguments[2];
                $this->password = $arguments[3];
                $this->phone = $arguments[4];
                $this->photo = $arguments[5];
                $this->role = $arguments[6];
                $this->cours = $arguments[7];
            }
            if (count($arguments) == 2) {
                $this->email = $arguments[0];
                $this->password = $arguments[1];
            }
            if (count($arguments) == 60) {
                $this->name = $arguments[0];
                $this->lastName = $arguments[1];
                $this->email = $arguments[2];
                $this->password = $arguments[3];
                $this->phone = $arguments[4];
                $this->photo = $arguments[5];
            }

        }
    }


    public function setRole(Role $role)
    {
        $this->role = $role;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstname(string $firstname): void
    {
        $this->name = $firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastName = $lastname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function setRoleId(int $id)
    {
        $this->roleId = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getname(): string
    {
        return $this->name;
    }

    public function getLastname(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function getCours(): array
    {
        return $this->cours;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function getRoleId()
    {
        return $this->roleId;
    }


    public function toStringWithFirstnameAndLastname()
    {
        return "(Utilisateur) => id : " . $this->id . " , firstname : " . $this->name . " , lastname : " . $this->lastName;
    }


    public function __toString()
    {
        return $this->toStringWithFirstnameAndLastname() .
            " , phone : " . $this->phone . " , email : " . $this->email . " , password : " . $this->password . " photo : " . $this->photo . " , Role : " . $this->role . " , Role_ID : " . $this->roleId;
    }


    public function create($tablename, $params)
    {

        parent::create($this->tablename, $params);
    }

    public function createUser(Utilisateur $utilisateur): Utilisateur
    {
        $params = [
            'name' => $utilisateur->getname(),
            'lastName' => $utilisateur->getLastname(),
            'email' => $utilisateur->getEmail(),
            'password' => $utilisateur->getPassword(),
            'phone' => $utilisateur->getPhone(),
            'roleId' => $utilisateur->getRoleId(),
            'photo' => $utilisateur->getPhoto()
        ];
        $this->create($this->tablename, $params);
        $utilisateur->setRole($this->role->findByName($utilisateur->getRole()->getRoleName()));
        return $utilisateur;
    }


    public function getByEmailAndPassword($email)
    {
        try {
            $query = "SELECT id, name, lastName, email, phone, photo, roleId, password FROM utilisateurs WHERE email = '" . $email . "';";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchObject(Utilisateur::class);

        } catch (PDOException $e) {
            echo 'Error:' . $e;
        }
        if (!$result) {
            return new Utilisateur();
        } else {
            return $result;
        }
    }

    public function findByEmailAndPassword(Utilisateur $user)
    {
        $user = $this::getByEmailAndPassword($user->getEmail());
        $user->setRole($this->role->getRoleById($user->getRoleId()));
        return $user;
    }
}