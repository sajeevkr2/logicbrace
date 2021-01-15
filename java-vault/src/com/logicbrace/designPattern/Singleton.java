package com.logicbrace.designPattern;

public class Singleton {
	private final int key=0;
	private final String val="Hello World!";
	private Singleton singleton;
	
	private Singleton() { }
	
	private Singleton getSingletonObject(){
		if(singleton == null){
			singleton = new Singleton();
		}
		return singleton;
	}
	private int getKey() {
		return this.key;
	}
	private String getVal() {
		return this.val;
	}
}
