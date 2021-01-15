package com.logicbrace.goldprogram;

public class NewCustomer extends LendingLoan{
    public NewCustomer()
    {
        super();
    }
    @Override
    public  float calculateLoan(int custID,int type,float wt,int fineness) throws WrongType,WrongFineness
    {
        float loan = 0;
        int baseFineness = 14;
        int baseFinenessPrice = 750;
        int transactionFee = 500;

        if (type == 1 && fineness >= baseFineness && fineness <= 24) {
            if (baseFineness == fineness) {
                loan = baseFinenessPrice;
            } else {
                loan = (((fineness - baseFineness) * 50) + baseFinenessPrice) - transactionFee;
            }

        }
        return loan;
    }
    public  float calculateLoan(int custID,int type,float wt,int fineness, int fees) throws WrongType,WrongFineness
    {
        float loan = 0;
        int baseFineness = 14;
        int baseFinenessPrice = 750;

        if (type == 1 && fineness >= baseFineness && fineness <= 24) {
            if (baseFineness == fineness) {
                loan = baseFinenessPrice;
            } else {
                loan = (((fineness - baseFineness) * 50) + baseFinenessPrice) - fees;
            }

        }
        return loan;
    }
}


