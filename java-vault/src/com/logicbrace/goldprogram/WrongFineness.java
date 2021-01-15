package com.logicbrace.goldprogram;

public class WrongFineness extends RuntimeException{
    public WrongFineness(String message) {
        super(message);
    }
    public WrongFineness(Throwable cause) {
        super(cause);
    }
    public WrongFineness(String message, Throwable cause) {
        super(message, cause);
    }
}

