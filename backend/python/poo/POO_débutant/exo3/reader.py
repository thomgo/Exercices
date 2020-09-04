# coding: utf8

class Reader():
    """Reader class with one attribut:
    - book : the book object borrowed by the reader from a library"""
    def __init__(self):
        self.book = None

    def borrow_book(self, library, title):
        """Function to get a book from a library, otherwise print an exception"""
        try:
            self.book = library.get_book(title)
        except Exception as e:
            print(e)

    def go_to_page(self, page_number):
        """Function to update the current_page of the borrowed book"""
        if page_number <= len(self.book.pages):
            page_number -= 1
            self.book.current_page = page_number

    def next_page(self):
        """Function to update the current_page of the borrowed book to the next one"""
        if self.book.current_page < len(self.book.pages) - 1:
            self.book.current_page += 1
            return True
        else:
            return False

    def previous_page(self):
        """Function to update the current_page of the borrowed book to the previous one"""
        if self.book.current_page > 0:
            self.book.current_page -= 1

    def read(self):
        """Function to print the content of current page from the borrowed book"""
        print(self.book.pages[self.book.current_page])

    def read_book(self):
        """Function to print the content of all pages and then close the book"""
        if self.book:
            while self.next_page():
                self.read()
            self.go_to_page(-1)
