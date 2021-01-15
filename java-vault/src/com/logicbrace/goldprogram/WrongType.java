package com.logicbrace.goldprogram;

public class WrongType extends RuntimeException {
    public WrongType(String message) {
        super(message);
    }
    public WrongType(Throwable cause) {
        super(cause);
    }
    public WrongType(String message, Throwable cause) {
        super(message, cause);
    }
}


