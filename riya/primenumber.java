import java.io.*;

class primenumber
{
	
	public static void main(String ar[])throws IOException
	{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		
		int c;
		c=Integer.parseInt(br.readLine());
		
		int ans,flag=0;
		
		if(c==0 || c==1)
		{ 
	        System.out.println(c+" Number is not prime");
		break;
		}
		
		for(int i=2;i<c;i++)
		{
			ans=c%i;
			if(ans==0)
			{
				
				flag=1;
				
			}
			
		}
                                    if(flag==0)
				 {
                      System.out.println(c+" Number is prime");
				 }		
					else
					{
						System.out.println(c+" Number is not prime");
					}
	}
	
	
}