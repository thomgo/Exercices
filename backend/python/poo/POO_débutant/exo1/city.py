# coding: utf8

class City():
    """Class representing a city defined by a name and a department"""
    def __init__(self, name, department):
        self.name = name
        self.department = department

    def show_location(self):
        """Print a nice sentence with the object's attribut"""
        print('The city of {} is in the French department of number {}'.format(self.name, self.department))

    def change_location(self, name, department):
        """Function to update the attributs of the city object"""
        self.name = name
        self.department = department
