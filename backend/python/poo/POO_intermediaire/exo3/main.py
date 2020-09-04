# coding: utf-8

from customer import Customer
from employee import Employee
from product import Product

if __name__ == '__main__':
    tshirt = Product('Red t-shirt', 20)
    phone = Product('Tamtung x8', 450)
    hat = Product('Red Hat', 12)
    bag = Product('WestPack bag', 40)

    customer = Customer('Kennedy', 'John', 42)
    employee = Employee('Robinard', 'Dylan-Steven', 19)

    customer + tshirt
    customer + phone
    print(customer)

    print(employee)
    print(employee >= 'manager')
