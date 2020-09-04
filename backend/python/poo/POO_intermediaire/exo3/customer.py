# coding: utf-8

from person import Person
from product import Product

class Customer(Person):
    def __init__(self, name, firstname, age):
        self.chart = []
        self.amount_to_pay = 0
        super().__init__(name, firstname, age)

    def __str__(self):
        product_names = [product.name for product in self.chart]
        text = "Carte d'identité du client\n\
        Nom : {}\n\
        Prénom : {}\n\
        Age : {}\n\
        Produits actuellement au panier : {}\n\
        A payer : {}\n"
        return text.format(self.name, self.firstname, self.age, product_names, self.amount_to_pay)


    def __add__(self, product):
        if isinstance(product, Product):
            self.chart.append(product)
            self.amount_to_pay += product.price
        else:
            raise Exception('You can only add an instance of Product to a Customer object')
