package com.logicbrace.java8;

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
public class StaticBlock {
	private static int B;
	private static int H;
	private static Boolean flag;
	static {
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		try {
			B = Integer.parseInt(br.readLine());
			H = Integer.parseInt(br.readLine());
		} catch (Exception e) {

		}
		flag = B > 1 && H > 1;
		if (!flag)
			System.out.println("java.lang.Exception: Breadth and height must be positive");
	}

	public static void main(String[] args) {
		if (flag) {
			int area = B * H;
			System.out.print(area);
		}

	}

}
