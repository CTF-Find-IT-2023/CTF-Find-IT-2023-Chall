# Python GUI program for a password bypass challenge

from tkinter import *
from tkinter import messagebox
import os

# Function to check if the password is correct
def checkPassword():
    if password.get() == "password":
        messagebox.showinfo("Success", "Password is correct!")
        messagebox.showinfo("Flag", "FindITCTF{t4ngl3D_w1tH_pyTh0n_4nd_5tuff}")

    else:
        messagebox.showerror("Error", "Password is incorrect!")

def main():
    # Create the window
    window = Tk()
    window.title("Password Bypass")
    window.geometry("300x100")

    # Create the password entry field
    global password
    password = StringVar()
    passwordEntry = Entry(window, textvariable=password, width=30)
    passwordEntry.grid(column=0, row=0, padx=10, pady=10)

    # Create the submit button
    submitButton = Button(window, text="Submit", command=checkPassword)
    submitButton.grid(column=0, row=1, padx=10, pady=10)

    # Run the window
    window.mainloop()

if __name__ == "__main__":
    main()