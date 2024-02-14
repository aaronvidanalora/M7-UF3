<?php

require("class.customer.php");

// Crear dos objetos Customer
$customer1 = new Customer();
$customer1->setCustName("John Doe");
$customer1->setCustCity("New York");
$customer1->setWorkingArea("Manhattan");
$customer1->setCustCountry("USA");

$customer2 = new Customer();
$customer2->setCustName("Jane Smith");
$customer2->setCustCity("Los Angeles");
$customer2->setWorkingArea("Downtown");
$customer2->setCustCountry("USA");

// Intercambiar valores usando variables temporales
$intercambioCustName = $customer1->getCustName();
$intercambioCustCity = $customer1->getCustCity();
$intercambioWorkingArea = $customer1->getWorkingArea();
$intercambioCustCountry = $customer1->getCustCountry();

$customer1->setCustName($customer2->getCustName());
$customer1->setCustCity($customer2->getCustCity());
$customer1->setWorkingArea($customer2->getWorkingArea());
$customer1->setCustCountry($customer2->getCustCountry());

$customer2->setCustName($intercambioCustName);
$customer2->setCustCity($intercambioCustCity);
$customer2->setWorkingArea($intercambioWorkingArea);
$customer2->setCustCountry($intercambioCustCountry);

// Mostrar los valores intercambiados
echo "Customer 1 intercambio:<br/>";
echo "Name: " . $customer1->getCustName() . "<br/>";
echo "City: " . $customer1->getCustCity() . "<br/>";
echo "Working Area: " . $customer1->getWorkingArea() . "<br/>";
echo "Country: " . $customer1->getCustCountry() . "<br/><br/>";

echo "Customer 2 intercambio:<br/>";
echo "Name: " . $customer2->getCustName() . "<br/>";
echo "City: " . $customer2->getCustCity() . "<br/>";
echo "Working Area: " . $customer2->getWorkingArea() . "<br/>";
echo "Country: " . $customer2->getCustCountry() . "<br/>";

?>
