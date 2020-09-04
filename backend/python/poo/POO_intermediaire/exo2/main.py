# coding: utf-8

from car import Car
from bus import Bus

if __name__ == '__main__':

    car = Car(3, 213551, 'black')
    print(car.license_number)
    print(car.color)
    print(car.number_doors)

    bus = Bus(2, 321581, 'red')
    print(bus.license_number)
    print(bus.color)
    print(bus.floors)
