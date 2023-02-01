using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ArrayStackTest
{
        public class ArrayStackTest
        {
        /*public static void Main(string[] args)
        {
            //To create a stack with maxmum capacity 10
            ArrayStack stack = new ArrayStack(10);
            //To push 10 elements onto the stack
            for (int i = 0; i < 10; i++)
            {
                //To make a string "objN" where N ranges 0 to 9
                string objToPush = "obj" + i;
                //Display what we're doing
                Console.WriteLine("pushing: {0}", objToPush);
                //To push the object on the stack
                stack.push(objToPush);
            }
            //To pop all elements from the stack
            while (!stack.isEmpty())
            {
                //To pop an object from the stack
                string objPoped = (string)stack.pop();
                //Display what we're doing
                Console.WriteLine("poping: {0}",objPoped);
            }*/
        static string name;
            public static void Main(string[] args)
            {
                //To create a stack with maxmum capacity 10
                ArrayStack stack = new ArrayStack(10);
                //To push 10 elements onto the stack
                for (int i = 0; i < 10; i++)
                {
                    string objToPush = "obj " + (1+i);
                    Console.Write("Enter name: ");
                    name = Console.ReadLine();
                    Console.WriteLine("pushing: {0} ,name: {1}", objToPush,name);
                    stack.push(objToPush+"\t"+"name: "+name);
                }
            //To pop all elements from the stack
            //int a = 1;
                while (!stack.isEmpty())
                {
                    string objPoped = (string)stack.pop();
                    Console.WriteLine("poping: {0}", objPoped);
                }
            }
        }
}
