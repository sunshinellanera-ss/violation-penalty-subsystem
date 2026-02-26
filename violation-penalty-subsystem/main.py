from models.student import Student

def main():
    student = Student(1, "Sunshine A. Llanera")
    
    while True:
        print("\n1. Add Violation\n2. Show Violations\n3. Exit")
        choice = input("Choose an option: ")
        
        if choice == "1":
            violation = input("Enter violation description: ")
            if student.add_violation(violation):
                print("Violation logged successfully.")
            else:
                print("This violation already exists!")
        elif choice == "2":
            print("Violations:", student.list_violations())
        elif choice == "3":
            break
        else:
            print("Invalid option.")

if __name__ == "__main__":
    main()