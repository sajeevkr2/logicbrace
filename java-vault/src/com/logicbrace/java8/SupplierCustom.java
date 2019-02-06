package com.logicbrace.java8;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Random;
import java.util.function.Consumer;
import java.util.function.Supplier;

public class SupplierCustom {

	public static void main(String args[]) throws IOException {
		
		Consumer<Integer> square=(v)-> System.out.println("Square of "+v +" is "+ (int) Math.pow(v, 2));
		Supplier<Integer> randomNum=()-> new Random().nextInt(50);
		square.accept(randomNum.get());
		
	}
}
