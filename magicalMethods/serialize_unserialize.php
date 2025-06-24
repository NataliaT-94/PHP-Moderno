<?php 
//__serialize: Tiene mas control sobre los valor a comparacion del metodo sleep. 

//__unserialize: puede recibir la información, los valores que estás por deserializar.

class User{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __serialize(): array
    {
        return [
            'name' => strtoupper($this->name),
            'email' => $this->email
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = null;
    }
}

$user = new User("pedro", "pedro@mail.com", "123423");//creamos el objeto
$s = serialize($user); //serializamos el user

echo $s."<br><br>";

$obj = unserialize($s);
print_r($obj);

?>