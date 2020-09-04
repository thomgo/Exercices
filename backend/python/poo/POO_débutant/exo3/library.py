# coding: utf8

class Library():
    """Library class with one attribut:
    - books : a list of book objects"""
    def __init__(self):
        self.books = []

    def add_book(self, book):
        """Function to append a book object to the books list"""
        self.books.append(book)

    def get_book(self, title):
        """Function to return a book object from the books list by its title"""
        for book in self.books:
            if title == book.title:
                return book
        raise Exception('The book you are looking for is not in the library')
