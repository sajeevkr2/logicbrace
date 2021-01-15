package com.logicbrace.thread;

public class ThreadRunnable implements Runnable {

    public static void main(String[] args) {
        ThreadRunnable threadExample = new ThreadRunnable();
        Thread th = new Thread(threadExample);
        th.start();
        System.out.println("This code is outside of the thread.");
    }

    @Override
    public void run() {
        System.out.println("This code is running in a thread.");
    }
}
