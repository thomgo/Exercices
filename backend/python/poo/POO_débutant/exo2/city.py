# coding: utf8

class City():
    """Class representing a city with 6 attributs :
    - name : the name of the city as a string
    - department : the department in which it is located as an integer
    - country : the country of the city as a string
    - population : the total amount of inhabitants as an integer
    - mayor : the name of the actual mayor as a string
    - capital : if it is or not the capital as a boolean"""
    def __init__(self, data_dic):
        self.name = None
        self.department = None
        self.country = None
        self.population = None
        self.mayor = None
        self.capital = None
        self.hydrate(data_dic)

    def hydrate(self, data):
        """Function to set a value to each attribut based on a dictionnary"""
        for key, value in data.items():
            # Prevent he creation of unwanted attributs
            if hasattr(self, key):
                setattr(self, key, value)

    def show_location(self):
        print('The city of {} is in the French department of number {}'.format(self.name, self.department))

    def change_location(self, name, department):
        self.name = name
        self.department = department

    def show_information(self):
        text = "-------------\n \
        name: {}\n \
        department: {}\n \
        country: {}\n \
        population: {}\n \
        mayor: {}\n \
        capital: {}\n"

        print(text.format(self.name, self.department, self.country,\
        self.population, self.mayor, self.capital))
