# coding: utf-8

from person import Person

class Employee(Person):
    possible_status = ['employee', 'technical', 'manager', 'executive']

    def __init__(self, name, firstname, age, status=False):
        self.status = 'employee'
        super().__init__(name, firstname, age)

    def __str__(self):
        text = "Informations sur l'employé \n\
        Nom : {} \n\
        Prénom : {} \n\
        Age : {} \n\
        Statut : {}"
        return text.format(self.name, self.firstname, self.age, self.status)

    def __ge__(self, status):
        if Employee.possible_status.index(self.status) >= Employee.possible_status.index(status):
            return True
        return False
