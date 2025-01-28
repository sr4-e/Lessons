**PHP Exception Object:**

1- PHP Exception Constructor

- Definition and Usage:
The Exception() constructor is used to create an Exception object and set some of its properties.
- Syntax:
new Exception(message, code, previous)
______________________________________________________________________________________
2- PHP Exception getCode() Method

- Definition and Usage:
The getCode() method returns an integer which can be used to identify the exception.
- Syntax:
$exception->getCode()
______________________________________________________________________________________
3-PHP Exception getFile() Method

- Definition and Usage:
The getFile() method returns the absolute path to the file where an exception occurred.
- Syntax:
$exception->getFile()
______________________________________________________________________________________
4-PHP Exception getMessage() Method

- Definition and Usage:
The getMessage() method returns a description of the error or behaviour that caused the exception to be thrown.
- Syntax:
$exception->getMessage()
______________________________________________________________________________________
5-PHP Exception getLine() Method

- Definition and Usage:
The getLine() method returns the line number of the line of code which threw the exception.
- Syntax:
$exception->getLine()
______________________________________________________________________________________
6-PHP Exception getPrevious() Method

- Definition and Usage:
If the exception was triggered by another one, then the getPrevious() method returns the other exception. Otherwise it returns null.
- Syntax:
$exception->getPrevious()
______________________________________________________________________________________
7-PHP Exception getTrace() Method

- Definition and Usage:
The getTrace() method returns a stack trace in the form of an array.
Stack traces contain information about all of the functions that are running at a given moment. The stack trace provided by this method has information about the stack at the time that the exception was thrown.
- Syntax:
$exception->getTrace()
______________________________________________________________________________________
8-PHP Exception getTraceAsString() Method

- Definition and Usage:
The getTraceAsString() method returns a stack trace in the form of a string.
Stack traces contain information about all of the functions that are running at a given moment. The stack trace provided by this method has information about the stack at the time that the exception was thrown.
- Syntax:
$exception->getTraceAsString()
______________________________________________________________________________________
