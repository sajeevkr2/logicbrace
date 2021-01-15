package com.logicbrace.java8;

import java.io.IOException;
import java.util.Random;
import java.util.function.Consumer;
import java.util.function.Supplier;
import java.util.function.Predicate;

public class SupplierCustom {
	public static void main(String[] args) throws IOException {
		Consumer<Integer> square=(v)-> System.out.println("Square of "+v +" is "+ (int) Math.pow(v, 2));
		Supplier<Integer> randomNum=()-> new Random().nextInt(50);
		square.accept(randomNum.get());
		int a = randomNum.get();
		Predicate<Integer> val = (i) -> (i < 10);
		System.out.println(val);
	}
}
