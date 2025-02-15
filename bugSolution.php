function foo(a, b, tolerance = 0.00001) {
  return abs(a - b) < tolerance;
}

//This function compares floating point numbers with a tolerance, addressing precision errors.
//Example: foo(0.1 + 0.2, 0.3) will return true because the difference is within the tolerance.