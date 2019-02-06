package com.logicbrace.java8;

import java.util.function.Consumer;

public class ConsumerCustom {

	public static void main(String args[]) {
		Consumer<Integer> square = (v) -> System.out.println("Square : " + v * v);
		square.accept(2);
		square.accept(4);
	}

}
