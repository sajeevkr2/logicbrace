package com.logicbrace.java8;

import java.util.Arrays;
import java.util.List;

public class Anonymous {
    public static void main(String[] args){
        FunctionalInterfaceEx r = new FunctionalInterfaceEx() {
            @Override
            public void run() {
                System.out.println("Rudnnable");
            }
        };
        r.run();

        FunctionalInterfaceEx r1 = () -> System.out.println("Runnable");
        r1.run();

        List<Integer> demoList = Arrays.asList(1,2,3,4,5,6,7,8,9);
        System.out.println("Normal stream");

        //demoList.stream().map(v-> System.out.println());
        demoList.stream().forEach(System.out::print);
        System.out.println("\n");
        demoList.parallelStream().forEach(System.out::print);
        demoList.spliterator().forEachRemaining(System.out::println);
    }
}
