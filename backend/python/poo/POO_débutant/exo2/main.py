# coding: utf8

from cities import cities
from city import City

if __name__ == '__main__':
    # Loop through the cities list and instanciate a new city object with each dictionnary
    for city in cities:
        city = City(city)
        city.show_information()
