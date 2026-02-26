import pytest
from models.student import Student

def test_add_violation():
    student = Student(1, "Test Student")
    # First violation should succeed
    assert student.add_violation("Late Submission") == True
    # Duplicate violation should fail
    assert student.add_violation("Late Submission") == False
    # Adding another violation should succeed
    assert student.add_violation("Skipping Class") == True
    # Check the list of violations
    assert student.list_violations() == ["Late Submission", "Skipping Class"]