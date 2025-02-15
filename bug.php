function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This function will always return false when comparing floating point numbers.
//Example: foo(0.1 + 0.2, 0.3) will return false because of floating-point precision errors. 