class PROGRAM
{
private:
    /* data */
public:
    PROGRAM(/* args */);
    ~PROGRAM();
};

PROGRAM::PROGRAM(/* args */)
{
    struct PROGRAM
    {
        /* data */
    };
    
}

PROGRAM::~PROGRAM()
{
    #if !defined(MACRO)
    #define MACRO
    
    struct PROGRAM
    {
        /* data */
        if (/* condition */)
        {
            /* code */
        }
        else if (/* condition */)
        {
            /* code */
        }
        else
        {
            /* code */
        }
        
    };
    
    
    #endif // MACRO
    
}
