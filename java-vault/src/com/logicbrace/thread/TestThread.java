package com.logicbrace.thread;

public class TestThread extends Thread {
    @Override
    public void run(){
        Thread t = Thread.currentThread();
        System.out.println("Current Thread : " + t.getName());
    }
}
