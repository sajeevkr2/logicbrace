package com.logicbrace.java8;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.List;
import java.util.PriorityQueue;
import java.util.stream.Stream;

public class test {
	public static void main(String args[]) {
		
		int m=8, g=9;
		PriorityQueue<String> queue=new PriorityQueue<String>();
		queue.add("a");
		queue.add("v");
		queue.add("k");
		queue.add("j");
		queue.add("r");
		System.out.println(queue.element());
		System.out.println(queue.peek());
		Iterator<String> itr=queue.iterator();
		while(itr.hasNext()) {
			System.out.println(itr.next());
			m=m+g;
			++m;
		}
		queue.remove();
		queue.poll();
		
		
		Iterator<String> itr2=queue.iterator();
		while(itr2.hasNext()) {
			System.out.println(itr2.next());
			g=m+g;
			++g;
		}
		System.out.println(m+g);
		
	}
	
	}
