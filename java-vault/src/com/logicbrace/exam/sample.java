package com.logicbrace.exam;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class sample {
    public static void main(String[] args) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        System.out.println("String : " + br.readLine());
    }
}
