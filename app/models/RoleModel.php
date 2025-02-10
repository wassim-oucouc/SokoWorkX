<?php

class Role extends Model {

    private int $id=1;
    private string $name;
    private string $Description;
    private string $Logo ;

    public function __construct(){
        parent::__construct();
    }


    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setRoleName(string $roleName) : void {
        $this->name = $roleName;
    }

    public function setDescription(string $description) : void {
        $this->Description = $description;
    }

    public function setLogo(string $logo): void {
        $this->Logo = $logo;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getRoleName() : string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->Description;
    }

    public function getLogo(): string {
        return $this->Logo;
    }

    public function getbyname($tablename, $name)
    {

        return parent::getbyname($tablename, $name);
    }

    public function findByName($roleName):Role{
        $tablename='Roles';
        $role = $this->getbyname('Roles',$roleName);
        // var_dump($result);
        // die();
        return $role;
    }


    public function __toString()
    {
        return "(Role) => id : " . $this->id . " , name : " . $this->name . " , description : " . $this ->Description . " , logo : " . $this ->Logo ."";
    }

    public function getById($tablename, $id): Role
    {
        try {
            return parent::getById($tablename, $id);
        }
        catch (Exception $e){
            echo'user not found:'.$e;
            return new Role();
        }
    }

    public function getRoleById($RoleId): Role
    {
    return $this->getById('Roles', $RoleId);
    }

}