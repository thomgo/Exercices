# coding: utf8

class Book():
    """Book class with 3 attributs:
    - title : the main title of the book as a string
    - pages : a list of strings representing each page of the books
    - current_page : the page the reader is on, -1 by default because the book is closed"""
    def __init__(self, title, pages):
        self.title = title
        self.pages = pages
        self.current_page = -1
