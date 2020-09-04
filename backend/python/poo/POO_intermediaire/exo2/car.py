# coding: utf-8
from vehicle import Vehicle

class Car(Vehicle):
    doors = [3,5]

    def __init__(self,number_doors, license_number, color):
        self.number_doors = number_doors
        super().__init__(license_number, color)

    @property
    def number_doors(self):
        return self.__number_doors

    @number_doors.setter
    def number_doors(self, number_doors):
        if number_doors in Car.doors:
            self.__number_doors = number_doors
        else :
            self.__number_doors = False
