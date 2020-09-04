# coding: utf8

from city import City

if __name__ == '__main__':
    
    city = City('Paris', 92)
    city.show_location()

    city.change_location('Lille', 59)
    city.show_location()
