# coding: utf-8

class Clio():
    """Class representing a clio car. Class attributs give the specificities of the car model.
    price_range = a list with the minimum and maximum possible prices for a new car
    price = an integer for the price of a new car
    doors = a list with the possible number of doors
    colors = a dictionnary with color names and references
    As instance attributs we have :
    number_doors = the number of doors as an integer for a specific Clio
    color_number = the color reference as an integer for a specific Clio
    color = the color name as a string for a specific Clio"""
    price_range = [8000, 30000]
    price = 20000
    doors = [3, 5]
    colors = {
        'black' : 1234258,
        'blue' : 14255,
        'green' : 143582,
        'red' : 134625852,
        'white' : 125452
    }

    def __init__(self, number_doors, color):
        self.number_doors = number_doors
        self.color_number = False
        self.color = color

    @property
    def number_doors(self):
        return self.__number_doors

    @number_doors.setter
    def number_doors(self, number_doors):
        try:
            Clio.doors.index(number_doors)
            self.__number_doors = number_doors
        except ValueError as e:
            print("Ce nombre de portes n'existe pas, message d'erreur : {}".format(e))
            exit()

    @property
    def color(self):
        return self.__color

    @color.setter
    def color(self, color):
        try:
            Clio.colors[color]
            self.__color = color
            self.color_number = Clio.colors[color]
        except KeyError as e:
            print("Cette couleur n'existe pas les clios, message d'erreur : {}".format(e))
            exit()

    @classmethod
    def update_price(cls, price):
        try:
            if cls.price_range[0] <= price <= cls.price_range[1]:
                cls.price = price
            else:
                raise Exception("Ce prix n'est pas autorisé")
        except Exception as e:
            print("Un problème est survenu, message d'erreur : {}".format(e))
            exit()
