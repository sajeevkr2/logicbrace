package com.logicbrace.thread;

public class CustomThread extends Thread {

    public static void main(String[] args) {
        CustomThread customThread = new CustomThread();
        customThread.run();
        System.out.println("The System is running outside the thread.");
    }

    @Override
    public void run() {
        Thread t= Thread.currentThread();
        System.out.println( t.getName() + ": The System is running in the thread.");
    }
}
