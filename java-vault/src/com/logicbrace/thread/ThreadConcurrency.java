package com.logicbrace.thread;

import java.time.ZonedDateTime;
import java.util.Date;

public class ThreadConcurrency extends CustomThread {
    public static int a=0;
    public static void main(String[] arguments){
        ThreadConcurrency threadConcurrency = new ThreadConcurrency();
        threadConcurrency.start();
        System.out.println(a);
        a++;
        System.out.println(a);
        System.out.println(Date.from(ZonedDateTime.now().minusMonths(1).toInstant()));
    }

    @Override
    public void run(){
        a++;
    }

}
