# coding: utf-8

from vehicle import Vehicle

class Bus(Vehicle):
    def __init__(self, floors, license_number, color):
        self.floors = floors
        super().__init__(license_number, color)

    @property
    def floors(self):
        return self.__floors

    @floors.setter
    def floors(self, floors):
        if 1 <= floors <= 2:
            self.__floors = floors
        else :
            self.__floors = False
