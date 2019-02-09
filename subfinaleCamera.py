import math
import imutils
import numpy as np
import cv2
import Person
import time

#initiate
cnt_up   = 0
cnt_down = 0
cnt_seat = 25
cnt_least = 0
cnt_stand = 0
cnt_max = 25
cnt_minus = 1
cnt_plus = 1
cnt_free = 25

#can replace the videocapture call by 0,1,2... depends on how many cam used
cap = cv2.VideoCapture(0)


for i in range(19):
    print (i), cap.get(i)
    
#getting the height of cam
    
w = cap.get(3)
h = cap.get(4)
fps = int(cap.get(cv2.CAP_PROP_FPS))
n_frames = int(cap.get(cv2.CAP_PROP_FRAME_COUNT))
frameArea = h*w

#threshold for calibration
areaTH = frameArea/75
print ('Area Threshold'), areaTH

#drawing lines input - output
line_up = int(2*(h/5))
line_down   = int(3*(h/5))

up_limit =   int(1*(h/5))
down_limit = int(4*(h/5))

print ("Red line y:"),str(line_down)
print ("Blue line y:"), str(line_up)
line_down_color = (255,0,0)
line_up_color = (0,0,255)
pt1 =  [0, line_down];
pt2 =  [w, line_down];
pts_L1 = np.array([pt1,pt2], np.int32)
pts_L1 = pts_L1.reshape((-1,1,2))
pt3 =  [0, line_up];
pt4 =  [w, line_up];
pts_L2 = np.array([pt3,pt4], np.int32)
pts_L2 = pts_L2.reshape((-1,1,2))

pt5 =  [0, up_limit];
pt6 =  [w, up_limit];
pts_L3 = np.array([pt5,pt6], np.int32)
pts_L3 = pts_L3.reshape((-1,1,2))
pt7 =  [0, down_limit];
pt8 =  [w, down_limit];
pts_L4 = np.array([pt7,pt8], np.int32)
pts_L4 = pts_L4.reshape((-1,1,2))

#for detecting the background and foreground of the vid
fgbg = cv2.createBackgroundSubtractorMOG2(detectShadows = True)

kernelOp = np.ones((3,3),np.uint8)
kernelOp2 = np.ones((5,5),np.uint8)
kernelCl = np.ones((11,11),np.uint8)


font = cv2.FONT_HERSHEY_SIMPLEX
persons = []
max_p_age = 5
pid = 1

#getting frame of vids
while(cap.isOpened()):

    ret, frame = cap.read()


    for i in persons:
        i.age_one
   
    fgmask = fgbg.apply(frame)
    fgmask2 = fgbg.apply(frame)

#masking
    try:
        ret,imBin= cv2.threshold(fgmask,200,255,cv2.THRESH_BINARY)
        ret,imBin2 = cv2.threshold(fgmask2,200,255,cv2.THRESH_BINARY)
        
#using morphological testing - open /close
        mask = cv2.morphologyEx(imBin, cv2.MORPH_OPEN, kernelOp)
        mask2 = cv2.morphologyEx(imBin2, cv2.MORPH_OPEN, kernelOp)
       
        mask =  cv2.morphologyEx(mask , cv2.MORPH_CLOSE, kernelCl)
        mask2 = cv2.morphologyEx(mask2, cv2.MORPH_CLOSE, kernelCl)
    except:
        print('EOF')
        print ('UP:'),cnt_up
        print ('DOWN:'),cnt_down
        print ('SEAT:'),cnt_seat
        break
   
    
    
    _, contours0, hierarchy = cv2.findContours(mask2,cv2.RETR_EXTERNAL,cv2.CHAIN_APPROX_SIMPLE)
    for cnt in contours0:
        area = cv2.contourArea(cnt)
        if area > areaTH:
           
                        
            M = cv2.moments(cnt)
            cx = int(M['m10']/M['m00'])
            cy = int(M['m01']/M['m00'])
            x,y,w,h = cv2.boundingRect(cnt)
            
#counting persons who pass the lines
            
            new = True
            if cy in range(up_limit,down_limit):
                for i in persons:
                    if abs(cx-i.getX()) <= w and abs(cy-i.getY()) <= h:
                       
                        new = False
                        i.updateCoords(cx,cy)   
                        if i.going_UP(line_down,line_up) == True:
                            cnt_up += 1;
                            print ("ID:"),i.getId(),'crossed going up at',time.strftime("%c")
                        elif i.going_DOWN(line_down,line_up) == True:
                            cnt_down += 1;
                            print ("ID:"),i.getId(),'crossed going down at',time.strftime("%c")
                            
                        if i.going_UP(line_down,line_up) == True:
                            cnt_seat += 1;
                            cnt_free += 1;
                            print ("ID:"),i.getId(),'crossed going up at',time.strftime("%c")

                            
                        elif i.going_DOWN(line_down,line_up) == True:
                            cnt_seat -= 1;
                            cnt_free -=1;
                            print ("ID:"),i.getId(),'crossed going down at',time.strftime("%c")


                        
                        #formula for counter
                            
                        if cnt_seat <= cnt_least:
                            cnt_stand = cnt_least - cnt_seat
                            
                        if cnt_seat <= cnt_least:
                            cnt_free = cnt_least - cnt_free                                    
                            
                        if cnt_seat > cnt_max:
                            cnt_seat = cnt_seat - cnt_minus
                            cnt_free = cnt_free - cnt_minus
                            
                            break   
                        
                    if i.getState() == '1':
                        if i.getDir() == 'down' and i.getY() > down_limit:
                            i.setDone()
                        elif i.getDir() == 'up' and i.getY() < up_limit:
                            i.setDone()
                    if i.timedOut():
                        index = persons.index(i)
                        persons.pop(index)
                        del i     
                if new == True:
                    p = Person.MyPerson(pid,cx,cy, max_p_age)
                    persons.append(p)
                    pid += 1

                    
           
            cv2.circle(frame,(cx,cy), 5, (0,0,255), -1)
            img = cv2.rectangle(frame,(x,y),(x+w,y+h),(0,255,0),2)            
           
    for i in persons:

        cv2.putText(frame, str(i.getId()),(i.getX(),i.getY()),font,0.3,i.getRGB(),1,cv2.LINE_AA)
   #lines 
    str_up = 'UP: '+ str(cnt_up)
    str_down = 'DOWN: '+ str(cnt_down)
    str_seat = 'Counts: '+str(cnt_seat)
    str_stand = 'Standing:'+str(cnt_stand)
    str_free = 'Seats Available:'+str(cnt_free)
    frame = cv2.polylines(frame,[pts_L1],False,line_down_color,thickness=2)
    frame = cv2.polylines(frame,[pts_L2],False,line_up_color,thickness=2)
    frame = cv2.polylines(frame,[pts_L3],False,(255,255,255),thickness=1)
    frame = cv2.polylines(frame,[pts_L4],False,(255,255,255),thickness=1)
   
    
    cv2.putText(frame, str_up ,(10,40),font,0.5,(255,255,255),2,cv2.LINE_AA)
    cv2.putText(frame, str_up ,(10,40),font,0.5,(0,0,255),1,cv2.LINE_AA)
    
    cv2.putText(frame, str_down ,(10,90),font,0.5,(255,255,255),2,cv2.LINE_AA)
    cv2.putText(frame, str_down ,(10,90),font,0.5,(255,0,0),1,cv2.LINE_AA)
    
    cv2.putText(frame, str_seat ,(10,65),font,0.5,(255,255,255),2,cv2.LINE_AA)

    cv2.putText(frame, str_stand ,(380,80),font,0.7,(255,255,255),2,cv2.LINE_AA)
    cv2.putText(frame, str_stand  ,(380,80),font,0.7,(0,255,150),1,cv2.LINE_AA)
    
    cv2.putText(frame, str_free ,(380,40),font,0.7,(255,255,255),2,cv2.LINE_AA)
    cv2.putText(frame, str_free  ,(380,40),font,0.7,(0,255,150),1,cv2.LINE_AA)

    cv2.imshow('Frame',frame)
   
    k = cv2.waitKey(30) & 0xff
    if k == 27:
        break

cap.release()
cv2.destroyAllWindows()
