package com.logicbrace.strings;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;
import java.util.stream.Stream;

public class StringCharPatternRepeat {

    public static void main(String[] args) throws IOException {

//        System.out.println("Enter the string : ");
//        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
//        String stringVal = br.readLine();
//        System.out.println("Enter the alphabet to find the occurrence : ");
//        br = new BufferedReader(new InputStreamReader(System.in));
//        char alphabet = br.readLine().charAt(0);
//        int count = 0;
//        for(char val : stringVal.toCharArray()){
//            if(alphabet == val)
//            count++;
//        }
//        System.out.println("Count of "+ alphabet + " is " + count);
        int[] intArray = {12,32,42,563,234};
        System.out.print("Array sorted printing: ");
        Arrays.stream(intArray).sorted().forEach(System.out::println);
    }

}


