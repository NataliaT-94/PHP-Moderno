<?php 
//Princpio de segregacion de la interface/ Interface segregation principle (ISP):
//dice que tus clases que implementan interfaces no deberían depender de interfaces que no utilizan.
//se concentra más en separar interfaces, en funcionamientos que no están hechos funcionamientos abstractos.

interface CrudBaseInterface{
    public function add();
    public function get();
    // public function update();
    // public function delete();
}

interface UpdateCrudInterface{//puede que algunos modulos no utilicen update, por eso lo movimos a una interface individual
    public function update();
}

interface DeleteCrudInterface{
    public function delete();
}

interface GeneralCrudInterface extends CrudBaseInterface,
UpdateCrudInterface, DeleteCrudInterface{//creamos una interface que hereda las otras interfaces

}

class UserCrud implements GeneralCrudInterface{
    public function add()
    {
        echo "Se agrega";
    }

    public function get()
    {
        echo "Se obtiene";
    }

    public function update()
    {
        echo "Se modifica";
    }

    public function delete()
    {
        echo "Se elimina";
    }
}

class SaleCrud implements CrudBaseInterface, DeleteCrudInterface{//implementamos varias interface
       public function add()
    {
        echo "Se agrega";
    }

    public function get()
    {
        echo "Se obtiene";
    }

    // public function update()//ya que no utilida update, no hace falta implementar el UpdateCrudInterface
    // {
    //     throw new Exception("No se puede modificar una venta");
    // }

    public function delete()
    {
        echo "Se elimina";
    } 
}

// function update(CrudBaseInterface $crud){
//     $crud->update();
// }
function update(UpdateCrudInterface $crud){
    $crud->update();
}

function general(GeneralCrudInterface $crud){
    $crud->add();
    $crud->get();
    $crud->update();
    $crud->delete();
}

function get(CrudBaseInterface $crud){
    $crud->get();
}

general(new UserCrud());
get(new SaleCrud()),
// update(new SaleCrud());
?>