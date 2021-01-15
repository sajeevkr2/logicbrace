package com.logicbrace.java8;

import java.util.function.Consumer;
import java.util.function.Supplier;

public class ConsumerCustom {

	public static void main(String[] args) {
		Consumer<Integer> square = (v) -> System.out.println("Square : " + v * v);
		Consumer<Integer> cube = (val) -> System.out.println("Cube :" + (val * val * val));
		System.out.println(print());
		square.accept(2);
		square.accept(4);
//		try {
//			System.out.println(5 / 0);
//		}catch (Exception e){
//		System.out.println("Error While applying State Configuration" + e.getMessage());
//		}

		cube.accept(3);

	}

	public static int print(){
		try {
			System.out.println(5 / 0);
		}catch (Exception e){
			System.out.println("Error While applying State Configuration" + e.getMessage());
			return 0;
		}
		finally {
			System.out.println("finally");
		}
	return 6;
	}
}
