class Student:
    def __init__(self, student_id, name):
        self.student_id = student_id
        self.name = name
        self.violations = []

    def add_violation(self, violation):
        """Add a violation if it does not exist yet."""
        if violation not in self.violations:
            self.violations.append(violation)
            return True  # Violation added successfully
        return False  # Violation already exists

    def list_violations(self):
        """Return all violations of the student."""
        return self.violations