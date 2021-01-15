package com.logicbrace.array;

public class sample {
    public static void main(String[] args){
        int [] array = new int[3];
        int [] array1 = {1,2,3};
        String[] stringArray = new String[10];
        String [] stringArray1 = {"a","b","c"};

        for(int i=0;i<array1.length;i++){
            System.out.println(array1[i]);
        }

        for(int i=0;i<stringArray1.length;i++){
            System.out.println(stringArray1[i]);
        }

        for (int value : array1) {
            System.out.println(value);
        }

        for (String s : stringArray1) {
            System.out.println(s);
        }
    }
}
